import React from 'react';

interface CardProps {
    name: string;
    currentValue: number;
    changePercentage: number;
}

const Card: React.FC<CardProps> = ({ name, currentValue, changePercentage }) => {
    const isPositive = changePercentage>= 0;

    return (
        <div className="max-w-sm rounded overflow-hidden shadow-lg m-4">
            <div className="px-6 py-4">
                <div className="font-bold text-xl mb-2">{name}</div>
                <p className="text-gray-700 text-base">
                    Current Value: {currentValue}
                </p>
                <p className="text-gray-700 text-base">
                    Change: {changePercentage}%
                    {isPositive ?
                        <span className="text-green-500">↑</span> :
                        <span className="text-red-500">↓</span>
                    }
                </p>
            </div>
        </div>
    );
};

export default Card;