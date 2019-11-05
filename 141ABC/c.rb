n, k, q = gets.to_s.split.map(&:to_i)
score = []
n.times do
  score << k - q
end
q.times do
  score[gets.to_i - 1] += 1
end
score.each do |s|
  puts s > 0 ? "Yes" : "No"
end
# putting = []
# if k > q
#   n.times do
#     putting << "Yes\n"
#   end
# else
#   n.times.with_index do |i|
#     if array.count(i+1) > q - k
#       putting << "Yes\n"
#     else
#       putting << "No\n"
#     end
#   end
# end

# puts putting