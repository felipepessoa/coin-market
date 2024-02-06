export const getCoinMarkets = async () => {
    try {
        const response = await fetch('http://localhost:3000/api/v1/coin/markets');
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
       return await response.json();

    } catch (error) {
        console.error(error);
        return null;
    }
}