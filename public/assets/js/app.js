'use strict';
{
    // どこクリックするか
    const comments= document.querySelectorAll('.commentButton');
    comments.forEach(comment=>{
    comment.addEventListener('click', function() {
        // console.log('クリックされました！');
        // どこに対して要素の付け外しをしたいか
        comment.nextElementSibling.classList.toggle('appear');
    });
});

}
