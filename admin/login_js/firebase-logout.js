function GoogleLogout(){
    console.log('Logout call');
    firebase.auth().signOut().then(()=>{
      location.href='../';
    }).catch(e=>{
      console.log(e);
      window.alert(e)
    })
    
}