module.exports = function (e) {
    e.preventDefault();

    var worlds = document.querySelectorAll('[name="world"]:not(:checked)'),
        world  = worlds[Math.floor(Math.random() * worlds.length)];

    world.checked = true;
};
