let provider = new firebase.auth.GoogleAuthProvider();

function GoogleLogin(){
    console.log('Login call');
    firebase.auth().signInWithPopup(provider).then(res=>{
        console.log(res.user)
        if(res.user.email == "israelakinakinsanya@gmail.com"){  
          sessionStorage.setItem("user_name", res.user.displayName);
          sessionStorage.setItem("picture", res.user.photoURL);
          // location.href='../';
        }else{
          alert('Sorry, you are not allowed here');
          firebase.auth().signOut().then(()=>{
            location.href='./';
          }).catch(e=>{
            console.log(e);
            window.alert(e)
          });
          
        }
      
      
    }).catch(e=>{
      console.log(e);
      window.alert(e)
    })

}
