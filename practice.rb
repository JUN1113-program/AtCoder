a = gets.to_i
b = gets.to_s
s = gets.to_s.chomp
sum = 0

b.split.each do |num|
  sum += num.to_i
end
puts ("#{a + sum} #{s}")