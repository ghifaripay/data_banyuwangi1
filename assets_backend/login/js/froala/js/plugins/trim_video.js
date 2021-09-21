/*!
 * froala_editor v3.2.6 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2021 Froala Labs
 */

(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? factory(require('froala-editor')) :
  typeof define === 'function' && define.amd ? define(['froala-editor'], factory) :
  (factory(global.FroalaEditor));
}(this, (function (FE) { 'use strict';

  FE = FE && FE.hasOwnProperty('default') ? FE['default'] : FE;

  FE.PLUGINS.trimVideoPlugin = function (editor) {
    var trim_file;
    var trim_file_index;
    var trim_video_duration;
    var video_edit_httprequest;
    var sValue;
    var sPosition;
    var eValue;
    var ePosition;
    var file_list_trim;

    function _init() {}

    function trimVideo(file, index, file_list) {
      trim_file = file;
      trim_file_index = index;
      file_list_trim = file_list;
      renderTrimDiv();
    }
    /**
    * Trim Video Popup 
    */


    function renderTrimDiv() {
      var fileURL = URL.createObjectURL(trim_file);
      var body = editor.o_doc.body;
      var videoTrimContainer = editor.o_doc.createElement('div');
      videoTrimContainer.setAttribute('id', 'videoTrimContainer');
      videoTrimContainer.style.cssText = 'position: fixed; top: 0;left: 0;padding: 0;overflow-y:auto;width: 100%;height: 100%;background: rgba(0,0,0,0.4);z-index: 9998;display:block';
      body.appendChild(videoTrimContainer);
      var div = document.createElement("div");
      div.setAttribute('id', 'fr-form-container');
      div.innerHTML = "\n    <h3 class=\"fr-trim-video-name\"> ".concat(trim_file.name.replace(/\.[^.]*$/, ''), "</h3>\n    <div style='display:block;text-align: center; margin-left:50%;' id='trim-file-loader'></div>\n      <video id='fr-video-edit'  controls>\n       <source src=").concat(fileURL, " >\n        Your browser does not support the video tag.\n    </video> \n  ");
      document.getElementById('videoTrimContainer').appendChild(div);
      document.getElementById('fr-video-edit').addEventListener('loadedmetadata', function () {
        trim_video_duration = document.getElementById('fr-video-edit').duration;
        div.innerHTML += " \n        \n        <form>\n        <center>\n         <section class=\"fr-range-slider \">\n          <div id=\"startTimeValue\" class=\" fr-range-value-start\"> </div>\n            <input type=\"range\"  class=\"fr-slider\" value='0' min=\"0\" max=".concat(trim_video_duration, " id='startTime' >\n          <div  id=\"endTimeValue\" class=\"fr-range-value-end\" ></div>\n            <input type=\"range\"class=\"fr-slider\" value=").concat(trim_video_duration, " min='0' max=").concat(trim_video_duration, " id='endTime'>\n         <div id=\"selectedRange\"style=\" pointer-events: none; position: absolute;left: 0;top: 12px;width: 100%;\n         outline: none;\n         height: 6px;\n         border-radius: 10px;\"></div>\n            </section>\n        </center>\n        <div class=\"fr-video-trim-buttons\" >\n          <button id='convert' class='fr-trim-button'>").concat(editor.language.translate('Trim'), "</button>               \n          <button id='cancel' class='fr-trim-button' onsubmit='cancel()'>").concat(editor.language.translate('Cancel'), "</button>\n        </div>\n    </form>\n  "); //for start time bubble

        var range = document.getElementById('startTime'),
            rangeV = document.getElementById('startTimeValue'),
            setValue = function setValue() {
          sValue = Number((range.value - range.min) * 100 / (range.max - range.min));
          sPosition = 10 - sValue * 0.2;
          eValue = Number((range2.value - range2.min) * 100 / (range2.max - range2.min));
          ePosition = 10 - eValue * 0.2;
          rangeV.innerHTML = "<span>".concat(toHHMMSS(range.value), "</span>");
          rangeV.style.left = "calc(".concat(sValue, "% + (").concat(sPosition, "px))"); // show background ground if on input of start-time

          selectedRange.style.left = rangeV.style.left;
          selectedRange.style.width = "calc((".concat(eValue, "% + (").concat(ePosition, "px)) - (").concat(sValue, "% + (").concat(sPosition, "px)))");
          selectedRange.style.backgroundColor = '#03A9F4';
        }; //for end time bubble


        document.addEventListener("DOMContentLoaded", setValue);

        var range2 = document.getElementById('endTime'),
            rangeV2 = document.getElementById('endTimeValue'),
            setValue2 = function setValue2() {
          sValue = Number((range.value - range.min) * 100 / (range.max - range.min));
          sPosition = 10 - sValue * 0.2;
          eValue = Number((range2.value - range2.min) * 100 / (range2.max - range2.min)), ePosition = 10 - eValue * 0.2;
          rangeV2.innerHTML = "<span>".concat(toHHMMSS(range2.value), "</span>");
          rangeV2.style.left = "calc(".concat(eValue, "% + (").concat(ePosition, "px))"); // show background ground if on input of end-time

          var selectedRange = document.getElementById('selectedRange');
          selectedRange.style.left = "calc(".concat(sValue, "% + (").concat(sPosition, "px))");
          selectedRange.style.width = "calc((".concat(eValue, "% + (").concat(ePosition, "px)) - (").concat(sValue, "% + (").concat(sPosition, "px)))");
          selectedRange.style.backgroundColor = '#03A9F4';
        };

        document.addEventListener("DOMContentLoaded", setValue2);
        document.getElementById('convert').addEventListener('click', trim);
        document.getElementById('cancel').addEventListener('click', closeContainer);
        var startTime = document.getElementById('startTime');
        var endTime = document.getElementById('endTime'); //check startTime < endTime 

        startTime.oninput = function (e) {
          if (Number(startTime.value) >= Number(endTime.value)) {
            e.preventDefault();
            startTime.value = String(Number(endTime.value) - 1);
            return false;
          } else {
            setValue();
          }
        };

        endTime.oninput = function (e) {
          if (Number(endTime.value) <= Number(startTime.value)) {
            e.preventDefault();
            endTime.value = String(Number(startTime.value) + 1);
            return false;
          } else {
            setValue2();
          }
        };
      });
    }
    /**
     * Close Trim Video Popup
     */


    function closeContainer(event) {
      event.preventDefault();

      if (video_edit_httprequest != null) {
        video_edit_httprequest.abort();
      }

      video_edit_httprequest = null;
      var container = document.getElementById('videoTrimContainer');
      container.parentNode.removeChild(container);
      editor.filesManager.setChildWindowState(false);
    }
    /**
     * Return time in required format
     */


    function toHHMMSS(secs) {
      var sec_num = parseInt(secs, 10);
      var hours = Math.floor(sec_num / 3600) ? String(Math.floor(sec_num / 3600)) : '00';
      var minutes = Math.floor(sec_num / 60) % 60 ? String(Math.floor(sec_num / 60) % 60) : '00';
      var seconds = sec_num % 60 ? String(sec_num % 60) : '00';
      seconds = seconds.length < 2 ? '0' + seconds : seconds;
      minutes = minutes.length < 2 ? '0' + minutes : minutes;
      hours = hours.length < 2 ? '0' + hours : hours;
      return hours + ":" + minutes + ":" + seconds;
    }
    /**
       * Send Trim request
       */


    function trim(event) {
      var backedndUrl = 'http://localhost:3000/convert';
      event.preventDefault();
      var startTime = toHHMMSS(document.getElementById("startTime").value);
      var endTime = toHHMMSS(document.getElementById("endTime").value);

      if (trim_file.constructor === Blob) {
        trim_file = new File([trim_file], trim_file.name, {
          type: trim_file.type || '',
          lastModified: trim_file.lastModified
        });
      }

      var formData = new FormData();
      formData.append('startTime', startTime);
      formData.append('endTime', endTime);
      formData.append('file', trim_file);
      var xhr = new XMLHttpRequest();
      document.getElementById('trim-file-loader').classList.add('fr-file-loader');
      document.getElementsByClassName('fr-trim-button')[0].style.display = 'none';

      xhr.onload = function () {
        if (this.status == 200) {
          var file = new Blob([this.response], {
            type: this.response.type || ''
          });
          file.name = trim_file.name;
          file.lastModified = trim_file.lastModified;
          file.lastModifiedDate = trim_file.lastModifiedDate;
          file_list_trim.set(trim_file_index, file);
          editor.filesManager.upload(file, [], null, trim_file_index);
          document.getElementById('trim-file-loader').classList.remove('fr-file-loader');
          document.getElementsByClassName('fr-trim-button')[0].style.display = 'block';
          var container = document.getElementById('videoTrimContainer');
          container.parentNode.removeChild(container);
          editor.filesManager.setChildWindowState(false);
        }
      };

      xhr.open('POST', backedndUrl, true);
      xhr.responseType = 'blob';
      video_edit_httprequest = xhr;
      xhr.send(formData);
    }

    return {
      _init: _init,
      trimVideo: trimVideo
    };
  };

})));
//# sourceMappingURL=trim_video.js.map
