// Attach event listener to the back button
document.getElementById('backButton').addEventListener('click', goBack);

// Function to go back to the previous page with validation
function goBack() {
    if (confirm('Are you sure you want to go back? Any unsaved changes may be lost.')) {
        window.history.back();
    }
}
<form>
 <input type="button" value="Go back!" onclick="history.back()">
</form>
do