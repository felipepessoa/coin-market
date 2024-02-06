import { GetServerSideProps } from 'next';
import Summary from '../app/components/summary.component';
import { getCoinMarkets } from './services/coin/markets/markets.service';

interface Market {
  id: string;
  name: string;
  currentValue: number;
  changePercentage: number;
}

interface HomeProps {
  markets: Market[];
}

const getServerSideProps: GetServerSideProps<HomeProps> = async () => {
  // Replace this with your actual fetch function
  const data = await getCoinMarkets();

  return {
    props: {
      markets: data,
    },
  };
}

// @ts-ignore
export default function Home(markets) {
  return (
      <main>
        <Summary markets={markets} />
        {/* Rest of your JSX code here */}
      </main>
  );
}

