function clearForm() {
    let errorElement = document.querySelector('.form-alert');
    let fields = form.querySelectorAll('input');
    let containers = form.querySelectorAll('form-control-container');

    errorElement.classList.add('hidden');
    Array.prototype.forEach.call(fields, function (field) {
        field.classList.remove('is-invalid');
    });
    Array.prototype.forEach.call(containers, function (container) {
        let feedback = container.querySelector('.invalid-feedback');
        feedback.style.visibility = 'hidden';
        feedback.innerHTML = '';
    });
}

function displayError(element, message) {
    let alert = document.querySelector('.form-alert');
    let className = element.replace('_', '-').replace(/\.[0-9]+/g, '');
    let parent = document.querySelector('.' + className);
    let input = parent.querySelector('input');
    let feedback = parent.querySelector('.invalid-feedback');

    alert.classList.remove('hidden');
    input.classList.add('is-invalid');
    feedback.style.visibility = 'visible';
    feedback.style.display = 'inline-block';
    feedback.innerHTML = message;
}

function displaySuccess(message) {
    let formSuccess = document.querySelector('.form-alert');
    formSuccess.classList.remove('alert-danger').add('alert-success');
    formSuccess.innerHTML = message;
}

function scrollToFormTop() {
    document.documentElement.scrollTop = window.innerHeight;
}

function showFiles(files)
{
    label.textContent = files.length > 1 ? (input.getAttribute('data-multiple-caption') || '').replace('{count}', files.length) : files[0].name;
}

form = document.querySelector('#request');
var input = form.querySelector('input[type="file"]');
var label = form.querySelector('label[for="file"]');

input.style.background = '#cc0000';
input.addEventListener('change', function (e) {
    droppedFiles = e.target.files;
    showFiles(droppedFiles);
});

form.addEventListener('submit', function (e) {
    e.preventDefault();

    var ajax = new XMLHttpRequest();
    var data = new FormData(this);

    console.log(droppedFiles);

    Array.prototype.forEach.call(droppedFiles, function (file) {
        console.log(file);
        data.append(input.getAttribute('name'), file);
    });

    ajax.open(this.getAttribute('method'), this.getAttribute('action'), true);

    ajax.onload = function () {
        if (ajax.status >= 200 && ajax.status < 400) {
            var data = JSON.parse(ajax.responseText);
            scrollToFormTop();
            displaySuccess(data.success);
        } else {
            scrollToFormTop();
            let errors = JSON.parse(ajax.responseText);
            for (let key in errors) {
                displayError(key, errors[key]);
            }
        }
    };

    ajax.onerror = function () {
        alert('Error. Please, try again!');
    };

    ajax.send(data);
});
