"use strict";
(function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });


            // var nextBtn1 = document.querySelector('#step-1 .nextBtn');
            // nextBtn1.addEventListener('click', function(event) {
            //     var step1 = document.getElementById('step-1');
            //     var form = step1.querySelector('form');

            //     var requiredFields = step1.querySelectorAll('input[required]');

            //     for (var field of requiredFields) {
            //         if (!field.checkValidity()) {
            //             field.classList.add('is-invalid');
            //             event.preventDefault();
            //             return;
            //         }
            //         else {
            //             field.classList.remove('is-invalid');
            //         }
            //     }
            //     form.classList.add('was-validated');

            // });

            var nextBtn1 = document.querySelector('#step-1 .nextBtn');
            nextBtn1.addEventListener('click', function(event) {
                var step1 = document.getElementById('step-1');
                var form = step1.querySelector('form');

                var requiredFields = step1.querySelectorAll('input[required], select[required], textarea[required]');

                for (var field of requiredFields) {
                    if (!field.checkValidity()) {
                    field.classList.add('is-invalid');
                    field.classList.remove('is-valid');
                    event.preventDefault();
                    return;
                    } else {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                    }
                }
                form.classList.add('was-validated');
            });



            var nextBtn2 = document.querySelector('#step-2 .nextBtn');
            nextBtn2.addEventListener('click', function(event) {
                var step2 = document.getElementById('step-2');
                var form = step2.querySelector('form');

                var requiredFields = step2.querySelectorAll('input[required], textarea[required]');

                for (var field of requiredFields) {
                    if (!field.checkValidity()) {
                    field.classList.add('is-invalid');
                    field.classList.remove('is-valid');
                    event.preventDefault();
                    return;
                    } else {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                    }
                }

                form.classList.add('was-validated');

            });


            var nextBtn3 = document.querySelector('#step-3 .nextBtn');
            nextBtn3.addEventListener('click', function(event) {
                var step3 = document.getElementById('step-3');
                var form = step3.querySelector('form');

                var requiredFields = step3.querySelectorAll('input[required], select[required], textarea[required]');

                for (var field of requiredFields) {
                    if (!field.checkValidity()) {
                    field.classList.add('is-invalid');
                    field.classList.remove('is-valid');
                    event.preventDefault();
                    return;
                    } else {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                    }
                }
                form.classList.add('was-validated');

            });


        }, false);
    })();

