module.exports = {
    content: ['./public/**/*.{html,js,php}'],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: '#F14647',
                secondary: '#1F272D',
                greybg: '#D9D9D9',
                greyfont: '#6A6A6A',
                profilebtn: '#3C2F2F'
            },
            fontFamily: {
                Inter: ['Inter', 'sans-serif']
            },
        },
    },
    plugins: [
        function({ addComponents }) {
            addComponents({
            '.custom-list-decimal': {
                listStyle: 'none',
                counterReset: 'list',
                paddingLeft: '0',
            },
            '.custom-list-decimal li': {
                position: 'relative',
                paddingLeft: '2.5rem',
                marginBottom: '0.5rem',
                counterIncrement: 'list',
            },
            '.custom-list-decimal li::before': {
                content: 'counter(list)',
                fontSize: '0.75rem',
                width: '1rem',
                height: '1rem',
                lineHeight: '1rem',
                borderRadius: '50%',
                backgroundColor: '#6A6A6A',
                color: 'white',
                textAlign: 'center',
                position: 'absolute',
                left: '0',
                top: '0',
            },
            '.custom-disc': {
                listStyleType: 'none',
                paddingLeft: '1.5rem',
            },
            '.custom-disc li': {
            marginBottom: '0.5rem',
            },
            '.custom-disc li::before': {
            content: '""',
            display: 'inline-block',
            width: '8px',
            height: '8px',
            backgroundColor: '#6A6A6A',
            borderRadius: '50%',
            marginRight: '1rem',
            },
            });
        },
    ],
    
}

