window.onload = function() 
{
    var privacyBanner = document.createElement('div');
    privacyBanner.innerHTML ='This website uses cookies for analytics and to improve user experience. <a href="/privacy-policy">Learn more</a>. <button onclick="acceptPrivacy()">Accept</button>';
    document.body.appendChild(privacyBanner);
}

function acceptPrivacy() 
{
    document.body.removeChild(document.querySelector('.privacy-banner'));
}