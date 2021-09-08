document.addEventListener('DOMContentLoaded', function(){
    options = {'edge': 'right', 'menuWidth': '80vw'}
    var varsidenav = document.querySelectorAll('.sidenav');
    var instancessidenav = M.Sidenav.init(varsidenav, options);
    var varparallax = document.querySelectorAll('.parallax');
    var instancesparallax = M.Parallax.init(varparallax);
  })
