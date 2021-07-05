function check(){
    firebase.auth().onAuthStateChanged(function(user) {
        if (!user) {
            location.href='../';
        } else {
            
        }
      });
    }
    check();