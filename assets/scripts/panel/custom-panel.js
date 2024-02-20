window.onload = () => {
  setTimeout(() => {
    let fieldA1 = document.querySelector('.k-panel[data-role="student"][data-template="site"] .k-section-name-pages');
    if (fieldA1) {
      fieldA1.remove();
    }
    let fieldA2 = document.querySelector('.k-panel[data-role="student"][data-template="site"] .k-section-name-configpages');
    if (fieldA2) {
      fieldA2.remove();
    }
    let fieldB1 = document.querySelector('.k-panel[data-role="alumni"][data-template="site"] .k-section-name-pages');
    if (fieldB1) {
      fieldB1.remove();
    }
    let fieldB2 = document.querySelector('.k-panel[data-role="alumni"][data-template="site"] .k-section-name-configpages');
    if (fieldB2) {
      fieldB2.remove();
    }
    let fieldC1 = document.querySelector('.k-panel[data-role="student"][data-template="post"] .k-tab-button[title="Meta"]');
    if (fieldC1) {
      fieldC1.remove();
    }
    let fieldC2 = document.querySelector('.k-panel[data-role="alumni"][data-template="post"] .k-tab-button[title="Meta"]');
    if (fieldC2) {
      fieldC2.remove();
    }
    let fieldD1 = document.querySelector('.k-panel[data-role="student"][data-template="post"] .k-field-name-author_name');
    if (fieldD1) {
      fieldD1.remove();
    }
    let fieldD2 = document.querySelector('.k-panel[data-role="alumni"][data-template="post"] .k-field-name-author_name');
    if (fieldD2) {
      fieldD2.remove();
    }
    let fieldE1 = document.querySelector('.k-panel[data-role="student"][data-template="post"] .k-field-name-author_id');
    if (fieldE1) {
      fieldE1.remove();
    }
    let fieldE2 = document.querySelector('.k-panel[data-role="alumni"][data-template="post"] .k-field-name-author_id');
    if (fieldE2) {
      fieldE2.remove();
    }
  }, 1000);
};