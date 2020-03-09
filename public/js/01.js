//---------------------------------------------------------------------------------
// Functions
//---------------------------------------------------------------------------------

const capitalize = name => {
	return name[0].toUpperCase() + name.slice(1);
};

const greet = (first, last) => {
	return `안녕하세요, ${capitalize(first)} ${capitalize(last)}님!`;
};

const prices = ['1.0', '흥정가능', '2.15'];
const formattedPrices = prices.map(p => parseFloat(p)).filter(p => p);


//---------------------------------------------------------------------------------
// TEST
//---------------------------------------------------------------------------------

console.log(formattedPrices);