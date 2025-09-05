function updateCounter(inputValue) 
{
    const maxLength = 100; // Set your desired maximum character limit
    const Chars = inputValue.length;
    document.getElementById("charCount").textContent = Chars;
}