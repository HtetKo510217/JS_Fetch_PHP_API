const task = document.getElementById('task');
const addTask = document.getElementById('addTask');
const showList = document.getElementById('showList');

addTask.addEventListener('click',function(){
    const formData = new FormData();
    formData.append('task',task.value);
    if(task.value !='') {
        fetch('http://localhost/ajax_with_php_api/api.php',{
        method : 'POST',
        body : formData
        })
        .then((response) => response.json())
        .then((data) => {
            if(data.success) {
                const liTag = document.createElement('li');
                liTag.classList.add("list-group-item", "active", "mb-3");
                liTag.innerHTML = task.value;
                showList.prepend(liTag);
                task.value = '';
            }
        });

    }else {
        alert('Enter task');
    }
});