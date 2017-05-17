
var my_step = 1;
var main = document.querySelector('main');
var index = 0;
var nb_step = document.querySelector('#order p.my-step');
var form_steps = document.querySelectorAll('#order div[class*="form-step-"]');
var btn_step_after = document.querySelector('#order div.step-after');

var btn_step_before = document.querySelector('#order div.step-before');

btn_step_after.addEventListener('click', function() {
  stepAfter();
});

btn_step_before.addEventListener('click', function() {
  stepBefore();
});


function stepAfter() {
  my_step++;
  nb_step.innerHTML = my_step;
  form_steps[index].classList.remove('active');
  form_steps[index+1].classList.add('active');
  index++;

  if (my_step > 1) {
    btn_step_before.style.display = '';

    if (my_step >= 5) {
      main.classList.add('ending');
      btn_step_before.style.display = 'none';
      btn_step_after.style.display = 'none';
    }
  }
}

function stepBefore() {
  my_step--;
  nb_step.innerHTML = my_step;
  form_steps[index].classList.remove('active');
  form_steps[index-1].classList.add('active');
  index--;

  if (my_step <= 1) {
    btn_step_before.style.display = 'none';
  }
}
