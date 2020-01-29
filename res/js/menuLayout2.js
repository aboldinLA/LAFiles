    var menus = [
        new ypSlideOutMenu("menu1", "down", 8, -20, 150, 100),
        new ypSlideOutMenu("menu2", "down", 84, -20, 275, 100),
        new ypSlideOutMenu("menu3", "down", 215, -20, 300, 525),
        new ypSlideOutMenu("menu4", "down", 785, -20, 200, 350),
        new ypSlideOutMenu("menu5", "down", 85, -20, 270, 200),
        new ypSlideOutMenu("menu6", "down", 500, -20, 325, 460),
        new ypSlideOutMenu("menu7", "down", 400, -20, 450, 225),
        new ypSlideOutMenu("menu8", "down", 620, -20, 275, 300),
        new ypSlideOutMenu("menu9", "down", 850, -20, 180, 225)
    ]

    for (var i = 0; i < menus.length; i++) {
        menus[i].onactivate = new Function("document.getElementById('act" + i + "').className='active';");
        menus[i].ondeactivate = new Function("document.getElementById('act" + i + "').className='';");
    }
