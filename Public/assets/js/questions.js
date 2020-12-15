const likeBtn = document.getElementById('like');
const likeParagraph = document.querySelector('#like p');
const inputQuestId = document.getElementById('input_quest_id');

const question_id = inputQuestId.value;

console.log(question_id);

likeBtn.addEventListener('click', ()=>{
    likeBtn.classList.toggle('like');
    value = parseInt(likeParagraph.innerHTML);
    let xhr = new XMLHttpRequest();

    if( likeBtn.classList.contains('like') ){
        value++;
        likeParagraph.innerHTML = value
        xhr.open('GET', `../CRUD/Question/likes.php?action=add&question_id=${question_id}`, true);
        xhr.send();
    }else{
        if( value >= 0 ){
            value--;
            likeParagraph.innerHTML = value;
            xhr.open('GET', `../CRUD/Question/likes.php?action=delete&question_id=${question_id}`, true);
            xhr.send();
        }
    }
});