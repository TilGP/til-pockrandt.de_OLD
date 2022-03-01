var sections = document.getElementsByClassName('section');
var navLinksDiv = document.getElementById('nav-links');

for(var i = 0; i < sections.length; i++){
    var sectionId = sections[i].id;
    navLinksDiv.innerHTML += `<li class="nav-item"> <a class="nav-link" href="#${sectionId}">${sectionId}</a> </li>`
}