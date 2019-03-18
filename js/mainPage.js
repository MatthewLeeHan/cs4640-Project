// anonymous function requirement
(function () {
    document.getElementById("pageContent").style.display='none';
    // after 1.5 seconds, loader will finish, rest of site will then show up
    setTimeout(function(){loaderCease();},1500);
})();
  
// maybe could add an animation to body coming in
function loaderCease() {
    var myloader = document.getElementById("loadingSpinner");
    var myPageContent = document.getElementById("pageContent");
    var mySpinnerHolder = document.getElementById("spinnerHolder");
    myloader.style.display = "none";
    myPageContent.style.display = "block";
    mySpinnerHolder.style.display = "none";
}