def array(s, k)
  count = 0
  beforeLr = ""
  change = []
  s.each.with_index do |lr, i|
    if beforeLr == lr
      count += 1
      if k > 0
        change << i
        count += 2
        k -= 1
      end
    end
    if count > s.length - 1
      count = s.length - 1
    end
    beforeLr = lr
  end

  change.each do |ch|
    s[ch],s[ch - 1] = s[ch] == "L" ? "R" : "L"
  end

  return s, k, count
end

def onepoint(s,k,count)
  if s.count("L") > s.length/2
    if s.count("R") > k
      count += k
    else
      count += s.count("R")
    end
  else
    if s.count("L") > k
      count += k * 2
    else
      count += s.count("L")*2
    end
  end
  if count > s.length - 1
    count = s.length - 1
  end
  return s, k, count
end

n,k = gets.to_s.split.map(&:to_i)
s = gets.to_s.chomp.split("")
s, k, count = array(s, k)
s, k, count = onepoint(s, k, count)
puts count