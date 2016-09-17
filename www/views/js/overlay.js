  function activateModal() {
    // initialize modal element
    var modalEl = document.createElement('div');
    var formImg; 
    formImg = "\
    <form action='/controllers/add.php' method='post' enctype=\"multipart/form-data\" class=\"imgIns\">\
    <input type=\"file\" name=\"image\">\
    </br>\
    <label from=\"imgName\">Название изображения: </label>\
    <input type=\"text\" name=\"imgName\" id=\"imgName\">\
    </br>\
    <input type=\"submit\" name=\"ImgSend\" style=\"background-color:#009688;\" class=\"mui-btn mui-btn--primary\">\
    </br>\
    </form>";
    modalEl.style.width = '400px';
    modalEl.style.height = '300px';
    modalEl.style.margin = '100px auto';
    modalEl.style.backgroundColor = '#fff';
    modalEl.innerHTML = formImg;
   // show modal
    mui.overlay('on', modalEl);
}