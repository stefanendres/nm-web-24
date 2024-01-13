window.onload = () => {
  setTimeout(() => {
    let forbiddenField = document.querySelector('.k-panel[data-role="alumni"][data-template="alumni"] .k-toggle-field').parentElement;
    forbiddenField.remove()
  }, 1000);
};

