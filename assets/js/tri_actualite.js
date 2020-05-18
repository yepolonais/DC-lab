$(function () {
  $('option').click(function(){

    let maCategorie = this.text.toLowerCase();
    console.log(maCategorie);
    // let categorie = document.getElementsByTagName('article');
    // let categorie = $('article').hasClass('category-' + maCategorie);
    // let categorie = $('article').addClass('category-' + maCategorie);

    $('article').each(function(){
      // console.log($(this)[0].className);
      if($(this)[0].className.includes(maCategorie))
      {
        // console.log($(this)[0]);
        // $(this).animate({ "opacity": "1", "display": "block" }, "slow" );
        $(this).fadeIn(250);
      }
      else{
        // $(this).animate({ "opacity": "0", "display":"none"}, "slow" );
        $(this).fadeOut(250);
        // console.log($(this)[0]);
      }
    });

    // console.log(categorie[0].className);

      // if(categorie.hasClass('category-' + maCategorie))
      // {
      //   // categorie[i].style.display = 'flex';
      //   categorie.show();
      //   // categorie[i].style.color = 'red';
      // }
      // else{
      //   // categorie[i].style.display = 'none';
      //   categorie.hide();
      // }

          // for(i=0;i<categorie.length;i++)
    // {
    //   console.log(categorie[i].className);
    //   console.log(categorie[i].className.includes(maCategorie));
    //   if(categorie[i].className.includes(maCategorie))
    //   {
    //     // categorie[i].style.display = 'flex';
    //     categorie[i].show();
    //     // categorie[i].style.color = 'red';
    //   }
    //   else{
    //     // categorie[i].style.display = 'none';
    //     categorie[i].hide();
    //   }
    // }

  })
  $('article').click(function(){

    console.log(this.className);
  })


})
