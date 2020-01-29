    var menus = [
        new ypSlideOutMenu("menu1", "down", 8, 5, 150, 100),
        new ypSlideOutMenu("menu2", "down", 84, 5, 275, 100),
        new ypSlideOutMenu("menu3", "down", 215, 5, 300, 525),
        new ypSlideOutMenu("menu4", "down", 785, 5, 200, 350),
        new ypSlideOutMenu("menu5", "down", 85, 5, 270, 200),
        new ypSlideOutMenu("menu6", "down", 500, 5, 325, 460),
        new ypSlideOutMenu("menu7", "down", 400, 5, 450, 225),
        new ypSlideOutMenu("menu8", "down", 620, 5, 275, 300),
        new ypSlideOutMenu("menu9", "down", 850, 5, 180, 225)
    ]

    for (var i = 0; i < menus.length; i++) {
        menus[i].onactivate = new Function("document.getElementById('act" + i + "').className='active';");
        menus[i].ondeactivate = new Function("document.getElementById('act" + i + "').className='';");
    }
