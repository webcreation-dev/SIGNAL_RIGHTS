"use strict";
var notify = $.notify(
  '<i class="fa fa-bell-o"></i><strong>Chargement</strong> de la page...',
  {
    type: "theme",
    allow_dismiss: true,
    delay: 2000,
    showProgressbar: true,
    timer: 300,
    animate: {
      enter: "animated fadeInDown",
      exit: "animated fadeOutUp",
    },
  }
);

setTimeout(function () {
  notify.update(
    "message",
    '<i class="fa fa-bell-o"></i><strong>Bienvenue</strong> sur SIGNAL RIGHTS.'
  );
}, 1000);
