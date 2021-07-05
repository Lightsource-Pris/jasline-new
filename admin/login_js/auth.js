function l_check(){
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            location.href='./user/';
        } else {
            
        }
      });
    }
    l_check();