let main_nav_icon = document.querySelector(".main_nav_icon") 

let sub_nav_icon = document.querySelector(".sub_nav_icon")

let nav_bottom_section = document.querySelector(".nav_bottom_section")
let sub_navigation_container = document.querySelector(".sub_navigation_container")

main_nav_icon.onclick=function(){
    
    if( nav_bottom_section.style.display=='block'){
        nav_bottom_section.style.cssText = 'display:none !important'
    }else{
        nav_bottom_section.style.cssText = 'display:block !important'
    }
}

sub_nav_icon.onclick = function(){
    // sub_navigation_container.style.display = 'block'
    if( sub_navigation_container.style.display == 'block'){
        sub_navigation_container.style.display = 'none'
    }else{
        sub_navigation_container.style.display = 'block'
    }
}