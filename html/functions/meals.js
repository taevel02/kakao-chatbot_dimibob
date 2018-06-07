const dimibob = require('../node_modules/dimibob/lib')
const { string: fmt } = require('../node_modules/dimibob/lib/fmt')

const show = ({ breakfast, lunch, dinner, snack }) =>
  `아침: ${fmt(breakfast)}\n점심: ${fmt(lunch)}\n저녁: ${fmt(dinner)}\n간식: ${fmt(snack)}\n`

async function breakfast (now = new Date()) {
  const { breakfast } = await dimibob.daily(now)
  return `${breakfast}`;
}

async function lunch (now = new Date()) {
  const { lunch } = await dimibob.daily(now)
  return `${lunch}`;
}

async function dinner (now = new Date()) {
  const { dinner } = await dimibob.daily(now)
  return `${dinner}`;
}

async function snack (now = new Date()) {
  const { snack } = await dimibob.daily(now)
  return `${snack}`;
}

/*
breakfast()
  .then(() => console.log('Done.') || process.exit(0))
  .catch(err => console.error(err) || process.exit(1))

lunch()
  .then(() => console.log('Done.') || process.exit(0))
  .catch(err => console.error(err) || process.exit(1))

dinner()
  .then(() => console.log('Done.') || process.exit(0))
  .catch(err => console.error(err) || process.exit(1))

snack()
  .then(() => console.log('Done.') || process.exit(0))
  .catch(err => console.error(err) || process.exit(1))
*/
