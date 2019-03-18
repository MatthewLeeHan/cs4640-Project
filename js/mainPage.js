// anonymous function requirement
(function () {
    document.getElementById("pageContent").style.display='none';
    setTimeout(function(){loaderCease();},2000);
})();
  
function loaderCease() {
    // alert('yee');
    var myloader = document.getElementById("loadingSpinner");
    var myPageContent = document.getElementById("pageContent");
    var mySpinnerHolder = document.getElementById("spinnerHolder");
    myloader.style.display = "none";
    myPageContent.style.display = "block";
    mySpinnerHolder.style.display = "none";
}