function downloadFile() {
    var fileUrl = 'https://appgallery.huawei.com/app/C100252597';
    
    var link = document.createElement('a');
    link.href = fileUrl;
    link.download = 'app.ext'; 
    
    
    document.body.appendChild(link);
    
    link.click();
    
    document.body.removeChild(link);
}
