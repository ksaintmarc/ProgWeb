fetch('./include/extract.php')
.then(response => {
    if (response.ok){
        response.json()
            .then(data => {
                data.forEach(dataMessage => {
                    const article = document.createElement('article')
                    const message = document.createElement('p')
                    message.innerText = `${dataMessage.commentaire}`
                    article.appendChild(message)
                    const messagesContainer = document.querySelector('section')
                    messagesContainer.appendChild(article)
                });
            })
    } else {
    response.json()
            .then(errorMessage => {
                const errorContainer = document.getElementById('error')
                errorContainer.style.display = 'flex'
                errorContainer.innerText = errorMessage.error
            })
    }
    //console.log(response.json);
})
.catch(error => {
    console.log(error)
})
