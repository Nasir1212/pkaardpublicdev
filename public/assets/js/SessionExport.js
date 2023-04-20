// import CryptoJS from 'crypto-js';
{/* <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> */}


class SessionExport{

 static Session=()=>{
    let ciphertext  = sessionStorage.getItem("UserData");
    if(ciphertext){
      let bytes = CryptoJS.AES.decrypt(ciphertext.toString(), 'pkaard');
    var decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
    return decryptedData;
    }
 }

 static setSession = (data)=>{
    var ciphertext = CryptoJS.AES.encrypt(JSON.stringify(data), 'pkaard');
    sessionStorage.setItem('UserData',ciphertext);
    return true;
 }


 static getLocalStorage=()=>{
   let ciphertext  = localStorage.getItem("card");
   if(ciphertext){
     let bytes = CryptoJS.AES.decrypt(ciphertext.toString(), 'pkaard');
   var decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
   return decryptedData;
   }
}

static setLocalStorage = (data)=>{
   var ciphertext = CryptoJS.AES.encrypt(JSON.stringify(data), 'pkaard');
   localStorage.setItem('card',ciphertext);
   return true;
}


    
}

// export default SessionExport;