(function () {
    var formContact = document.querySelector('#form-contato');
    var textareaContact = document.querySelector('#form-contato textarea');
    var textareaVoid = document.querySelector('#form-contato #textareaVoid');
    var inputName = document.querySelector('#form-contato #nome-contato');
    var inputSubject = document.querySelector('#form-contato #assunto-contato');
    var inputNameVoid = document.querySelector('#form-contato #inputNameVoid');
    var p = document.createElement('p');


    p.innerHTML = 'Preencha o campo.';
    p.style.color = 'red';
    p.style.fontSize = '12px';

    formContact.addEventListener('submit', function (e) {
        e.preventDefault();
        
        if (!inputName.value) {
            inputNameVoid.appendChild(p);
            
            return;
        }
        
        if (!textareaContact.value) {
            textareaVoid.appendChild(p);
            
            return;
        }

        if (!inputSubject.value) {
            textareaVoid.appendChild(p);
            
            return;
        }
        
        
        formContact.submit();
        textareaContact.value = '';
        inputSubject.value = '';
        document.querySelector('#form-contato input').value = '';
        document.querySelector('#form-contato #email-contato').value = '';

    });
})();



