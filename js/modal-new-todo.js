let modalNewTodo = document.querySelector(".modal-overlay-new-todo");
let btn_new_todo = document.getElementById("btn_new_todo");
console.log('btn_new_todo');

btn_new_todo.onclick = function () {
    modalNewTodo.style.display = "flex";
}

window.onclick = function (event) {
    if (event.target == modalNewTodo) {
        modalNewTodo.style.display = "none";
    }
}