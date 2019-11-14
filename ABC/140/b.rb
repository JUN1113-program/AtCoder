n = gets.to_i
a = gets.to_s.chomp.split.map(&:to_i)
b = gets.to_s.chomp.split.map(&:to_i)
c = gets.to_s.chomp.split.map(&:to_i)
sum = 0
before = 100

a.each do |d|
  if d == before + 1
    sum += c[d - 2]
  end
  sum += b[d - 1]
  before = d
end
puts sum