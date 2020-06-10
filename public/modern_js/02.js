//---------------------------------------------------------------------------------
// Consts
//---------------------------------------------------------------------------------
const landscape = {
    title: 'LandScape',
    photographer: 'Nathan',
    equipment: 'Canon',
    format: 'digital',
    src: '/landscape-nm.jpg',
    location: [32.7122222, -103.1405556]
};

//---------------------------------------------------------------------------------
// Functions
//---------------------------------------------------------------------------------
function displayPhoto(photo) {
    const {
        title,
        photographer = 'Anonymous',
        location: [latitue, longitue],
        src : url,
        ...other
    } = photo;

    const additional = Object.keys(other).map(key => `${key}:${other[key]}`);

    return (`
        <img alt="${title} 사진 ${photographer} 촬영" alt="${url}"/>
        <div>${title}</div>
        <div>${photographer}</div>
        <div>위도: ${latitue}</div>
        <div>경도: ${longitue}</div>
        <div>${additional.join(' <br/> ')}</div>
    `);
}

//---------------------------------------------------------------------------------
// TEST
//---------------------------------------------------------------------------------

console.log(displayPhoto(landscape));