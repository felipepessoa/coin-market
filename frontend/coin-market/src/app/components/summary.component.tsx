import React from 'react';
import Card from './card.component';

interface Market {
    id: string;
    name: string;
    currentValue: number;
    changePercentage: number;
}

interface SummaryProps {
    markets: Market[];
}

const Summary: React.FC<SummaryProps> = ({ markets }) => {
    console.log(markets)
    return (
        <div className="flex flex-wrap justify-center">
            {markets.map((market) => (
                <Card
                    key={market.id}
                    name={market.name}
                    currentValue={market.currentValue}
                    changePercentage={market.changePercentage}
                />
            ))}
        </div>
    );
};

export default Summary;