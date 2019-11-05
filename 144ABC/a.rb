A, B = gets.to_s.split.map(&:to_i)

if A >= 2*B
  puts A - 2 * B
else
  puts 0
end