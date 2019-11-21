const palmTree = (n = 1) => typeof n == 'number' && n > 0 ? 'p'.repeat(n) : false
console.log(palmTree(3))