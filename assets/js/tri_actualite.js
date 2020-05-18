$(function () {
  $('option').click(function () {
    let maCategorie = this.value.toLowerCase(); //* enregistre la catégorie sélectionnée par l'utilisateur dans le <select>
    // console.log(maCategorie);
    $('article').each(function () {
      // console.log($(this)[0].className);
      if ($(this)[0].className.includes(maCategorie)) //* vérifie que la catégorie sélectionnée est présente dans les class des articles
      {
        $(this).fadeIn(500);
      }
      else
      {
        $(this).fadeOut(500);
      }
    });
  });
});

