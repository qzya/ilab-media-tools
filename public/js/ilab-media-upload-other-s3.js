var ilabMediaOtherS3Uploader=function(a,o,e){this.start=function(){var t=e.type;"application/x-photoshop"==t&&(t="image/psd");var r={action:"ilab_upload_prepare",filename:e.name,type:t};a.post(ajaxurl,r,function(t){if("ready"==t.status){o.updateStatusText("Uploading ...");var r=new XMLHttpRequest;r.open("PUT",t.url,!0),r.upload.onprogress=function(a){o.updateProgress(a.loaded/a.total)},r.onload=function(){var e={action:"ilab_upload_import_cloud_file",key:t.key};a.post(ajaxurl,e,function(a){o.itemUploaded("success"==a.status,a)})},r.onerror=function(){o.itemUploadError()},r.send(e)}else o.itemUploadError()})}};ilabMediaUploadItem.prototype.storageUploader=ilabMediaOtherS3Uploader;