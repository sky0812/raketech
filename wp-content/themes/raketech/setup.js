let command = process.argv[3] || 'setup';

console.log(`The ${command} npm script has been deprecated.`);
console.log('-----------------------');
console.log('Please install the @goldencomm/cli package globally');
console.log(`Then run the "gc ${command}" command`);
console.log('-----------------------');
console.log('For more info, please read the docs at\n - https://www.npmjs.com/package/@goldencomm/cli\n - https://www.npmjs.com/package/@goldencomm/build-scripts');