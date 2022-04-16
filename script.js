function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Закройте выпадающее меню, если пользователь щелкает за его пределами
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

  var score = 0;
  var max_score = 0;
  var right_answer = "5ffe533b830f08a03263"; 

function checkAnswers() {
    var allRightRadios = document.getElementsByClassName("5ffe533b830f08a03263");
    for (i = 0; i < allRightRadios.length; i++){
      if (allRightRadios[i].checked)
      score += 1;        
    }
    max_score= score;
    console.log(score);
    score = 0;
  }