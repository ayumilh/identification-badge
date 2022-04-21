// Coloque suas redes sociais aqui
const linksSocialMedia = {
  github: "ayumilh",
  twitter: "",
  instagram: "",
  linkedin: ""
}

function changeSocialMedia(){
  for (let li of socialLinks.children){
    const social = li.getAttribute('class')
    
    li.children[0].href = `https://${social}.com/${linksSocialMedia[social]}`
  }
}

changeSocialMedia()

function getGitHubProfileInfos(){
  const url = `https://api.github.com/users/${linksSocialMedia.github}`

  fetch(url)
    .then(response => response.json())
    .then(data => {
      userImage.src = data.avatar_url
      userName.textContent = data.name
      userBio.textContent = data.bio
      userLocation.textContent = data.location
    })
}

getGitHubProfileInfos()