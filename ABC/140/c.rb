n = gets.to_i
b = gets.to_s.split.map(&:to_i)
a = []
beforeNum = 10**6
b.each.with_index do |c, i|
  a[i] = c > beforeNum ? beforeNum : c
  beforeNum = c
  a[i + 1] = c
end
puts a.inject(:+)