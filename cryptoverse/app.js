const COIN_RANKING_API_URL = "https://pure-woodland-29790.herokuapp.com/coins?limit=10'"
const coinList = document.getElementById("data")
const filterInput = document.getElementById("filter")

let coinsData = []
let filteredCoins = []

var formatCash = n => {
  if (n < 1e3) return n;
  if (n >= 1e4) return + (n / 1e9).toFixed(2) + "billion ETC"
}


filterInput.addEventListener('keyup', (e) => {
  const inputValue = e.target.value

  filteredCoins = coinsData.filter(coin => {
    return coin.name.toLowerCase().includes(inputValue)
  })
  displayCoins(filteredCoins)
})

const loadCoins = async () => {
  try {
    const res = await fetch(COIN_RANKING_API_URL)
    const dataResponse = await res.json()
    coinsData = dataResponse.data.coins
    console.log(dataResponse)
    displayCoins(dataResponse.data.coins)
  } catch (error) {
    console.log(error)
  }
}
var counter = 0;
const displayCoins = (coins) => {
  const htmlString = coins.map((coin) => {
    return `
    <tr>
      <td>${coin.rank}</td>
      <td><img src="${coin.iconUrl}" height="25" width="25" /></td>
      <td>${coin.name}</td>
      <td>${coin.change}</td>
      <td>${new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(coin.price)}</td>
      <td>${formatCash(coin.marketCap)}</td>
      
    </tr>
   `

    /* counter += 1;
     if (counter == 10) {
       break;
     }*/
  })
    .join('');
  coinList.innerHTML = htmlString
}
loadCoins()