var out = document.getElementById('out');
if(out==null){
    
}else{
    
    out.addEventListener('click',function(){
        localStorage.removeItem('User');
        localStorage.removeItem('Hack_1');
        localStorage.clear();
    });
}